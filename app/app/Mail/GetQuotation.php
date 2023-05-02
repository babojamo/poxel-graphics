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
        $reference = $this->request->reference;

        if($reference)
            $this->attachData($reference->get(), "reference-design.{$reference->extension()}", [
                'mime' => $reference->getMimeType(),
            ]);

        return $this->from('no-reply@poxelgraphics.ph', config('app.name'))
            ->markdown('emails.get-quotation');
    }
}
