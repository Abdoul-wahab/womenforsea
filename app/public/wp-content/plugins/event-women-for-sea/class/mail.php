<?php


/**
 * @package Mail
 */
class Mail {

    /**
     * @var array  
     */
    private $array_mail;

    /**
     * @var string  
     */
    private $email_resposable;
    
    /**
     * @param array $array_mail 
     * @param string $email_resposable 
     */
    public function __construct( $array_mail, $email_resposable)
    {
        $this->array_mail = $array_mail;
        $this->email_resposable = $email_resposable;
    }

    public function send_load_flux_mail(){
        ob_start();?>
        <p><?php printf( __( 'Newsletter message bla bla bla ... %s', 'event-newsletter' ), get_the_title( $event_id ) ); ?></p>
        <?php

        $message = ob_get_contents();
        ob_end_clean();

        add_filter( 'wp_mail_content_type','wp_set_content_type' );
        wp_mail( $this->email_resposable, __( 'Newsletter message: ', 'event-newsletter' ), $message );
    }

    public function wp_set_content_type(){
        return "text/html";
    }
    


}