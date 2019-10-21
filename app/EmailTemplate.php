<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class EmailTemplate extends Model
{
    use SoftDeletes;
    protected $table = 'email_message_template';
    protected $primaryKey = 'id';

    protected $fillable = ['identifier_name', 'email_subject', 'email_message', 'from_address', 'from_name','cc_address','bcc_address', 'status', 'created_at', 'updated_at' ];

    protected $dates = ['deleted_at'];
	
	
	
	function singleMailSendIntegration( $email_address, $identifier_name = '', $email_content ){
		
		$email_data = EmailTemplate::where( "identifier_name", $identifier_name )->first();
		
		if( $email_data && intval( $email_data->id ) > 0 ){
			
			$message_content = $email_data->email_message;
			$subject = $email_data->email_subject;
			
			if( count( $email_content ) > 0 ){
				foreach( $email_content as $key => $value ){
					$message_content = str_replace( ":".$key.":", $value, $message_content );
					$subject = str_replace( ":".$key.":", $value, $subject );
				}
			}
			
			
			Mail::to( 'rakesh@mobilecoderz.com' )
				->send( new SendMailable( $subject, $message_content, $email_data->from_address, $email_data->from_name, $email_data->cc_address ) );

			echo " ===============";	
			die();
			/*Mail::to( $email_address )
				->send( new SendMailable( $subject, $message_content, $email_data->from_address, $email_data->from_name, $email_data->cc_address ) ); */
			
		}
	}

}
