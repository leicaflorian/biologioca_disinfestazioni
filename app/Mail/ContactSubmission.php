<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmission extends Mailable {
  use Queueable, SerializesModels;
  
  /**
   * The order instance.
   *
   * @var \App\Models\Contact
   */
  public $contact;
  
  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Contact $contact) {
    $this->contact = $contact;
  }
  
  /**
   * Build the message.
   *
   * @return $this
   */
  public function build() {
    return $this->from($this->contact->email, $this->contact->name)
      ->to(config("mail.from.address"), config("mail.from.name"))
      ->subject("Richiesta di contatto")
      ->markdown('emails.contacts.submitted', [
        'contact' => $this->contact,
      ]);
  }
}
