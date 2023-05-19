<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class GetQuotation extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            $references = $this->request->references;

            if(!empty($references)) {
                $references = json_decode($references);
    
                foreach ($references as $reference) {
    
                    $filename = $reference->file_name;
                    $mime = $reference->mime;
                    $file = Storage::disk('public')->get($reference->path);
    
                    $this->attachData($file, "$filename", [
                        'mime' => $mime,
                    ]);
                }
            }
    
            return $this->from('no-reply@poxelgraphics.ph', config('app.name'))
                ->markdown('emails.get-quotation');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
