<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Mail\QuoteFromSubmitted;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PostSubmit extends Controller
{
    public function submitContactForm(Request $request)
    {
         $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile' => 'required|max:10', // Adjust max length as needed
                'subject' => 'required|string|max:255',
            ]);
            
        
            
         try {
                
                $to = "ragesh.g@gadgeon.com";
                $subject = "New Contact Form Submission";
                $headers = "From: no-reply@industrial.gadgeon.com\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $message = new ContactFormSubmitted(
                                $request->input('fullname'),
                                $request->input('email'),
                                $request->input('mobile'),
                                $request->input('subject'),
                                $request->input('message'),
                                'business'
                            );
                $message = $message->render();
                    
                mail($to, $subject, $message, $headers);
                
                $to = $request->input('email');
                $subject = "Thank You for Contacting Us";
                $headers = "From: no-reply@industrial.gadgeon.com\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $message = new ContactFormSubmitted(
                                $request->input('fname') . ' ' . $request->input('lname'),
                                $request->input('email'),
                                $request->input('mobile'),
                                $request->input('subject'),
                                $request->input('message'),
                                'customer'
                            );
                $message = $message->render();
                    
                mail($to, $subject, $message, $headers);
    
            return redirect()->back()->with('success', 'Thank you for contacting us! Our staff will be in touch with you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending the message. Please try again later.');
        }
    }
    
    public function submitQuoteForm(Request $request)
    {
         
         $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile' => 'required|max:10', 
            ]);
     
            
         try {
             
              
            $to = "ragesh.g@gadgeon.com";
            $subject = "Thank You for Contacting Us";
            $headers = "From: no-reply@industrial.gadgeon.com\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $message = new QuoteFromSubmitted(
                            $request->input('fullname'),
                            $request->input('email'),
                            $request->input('mobile'),
                            $request->input('message'),
                            'business'
                        );
            $message = $message->render();
                
            mail($to, $subject, $message, $headers);
              
            $to = $request->input('email');
            $subject = "Thank You for Contacting Us";
            $headers = "From: no-reply@industrial.gadgeon.com\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $message = new QuoteFromSubmitted(
                            $request->input('fullname'),
                            $request->input('email'),
                            $request->input('mobile'),
                            $request->input('message'),
                            'customer'
                        );
            $message = $message->render();
                
            mail($to, $subject, $message, $headers);
                
           
    
            return redirect()->back()->with('success', 'Thank you for contacting us! Our staff will be in touch with you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending the message. Please try again later.');
        }
    }
}