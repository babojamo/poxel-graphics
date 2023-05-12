<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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
        $references = $this->request->references;

        if(!empty($references)) {
            foreach ($references as $reference) {
                $filename = $reference->getClientOriginalName();
                $this->attachData($reference->get(), "$filename", [
                    'mime' => $reference->getMimeType(),
                ]);
            }
        }

        return $this->from('no-reply@poxelgraphics.ph', config('app.name'))
            ->markdown('emails.get-quotation');
    }
}
