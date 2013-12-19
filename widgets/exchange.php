<?php


/**
 * Exchange Widget
 * @author Anton Zekeriev Rodin
 */
class ExchangeSoyminero extends WP_Widget {

	function __construct() {
		parent::__construct('exchange_widget', __('Exchange Rates', 'text_domain'),  array( 'description' => __( 'Show the exchange rates from blockchain', 'text_domain' )));
	}

	public function widget( $args, $instance ) {
            echo $args['before_widget'];
            echo "<h1>Test: </h1>";
            echo $args['after_widget'];
	}

	public function form( $instance ) {
            echo "<p>It uses the BlockChain API: <a href=\"http://blockchain.info/es/api/exchange_rates_api\">BlockChainApi</a></p>";
	}

	
	public function update( $new_instance, $old_instance ) {	
	}

} // class Foo_Widget