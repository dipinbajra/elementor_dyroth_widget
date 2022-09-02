<?php
if ( ! defined('ABSPATH')){
    exit;
}

class Elementor_Dyroth_Widget extends \Elementor\Widget_Base{
    public function get_name()
    {
        return 'CM clients';
    }

    public function get_title()
     {
        return esc_html('CM Clients', 'elementor-dyroth-widget');
     }

	public function get_icon()
    {
        return 'eicon-post';
    }

    public function get_custom_help_url() {
		return 'https://go.elementor.com/widget-name';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'dyroth', 'cm', 'clients' ];
	}

	// Register controls
    protected function register_controls()
    {	
		// Content Layout section under Content TAB
        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Layout', 'elementor-dyroth-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
			// Heading control
			$this->add_control(
				'heading',
				[
					'label' => esc_html__( 'Heading', 'elementor-dyroth-widget' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Default title', 'elementor-dyroth-widget' ),
					'placeholder' => esc_html__( 'Type your title here', 'elementor-dyroth-widget' ),
				]
			);  
			// End heading control
			// post per page 
			$this->add_control(
				'number',
				[
					'type' => \Elementor\Controls_Manager::NUMBER,
					'label' => esc_html__( 'Post per page','elementor-dyroth-widget'),
					
				],
			);
			//End post per page
				//column control
			$this->add_responsive_control(
				'column',
				[
					'label' => esc_html__( 'Column', 'elementor-dyroth-widget' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [1, 2, 3, 4, 5],
				]
			);
			// End column control

			// thumbnail position control
			$this->add_control(
				'image_position',
				[
					'type' => \Elementor\Controls_Manager::SELECT,
					'label' => esc_html__( 'Image Position', 'elementor-dyroth-widget' ),
					'options' => ['Top', 'Right', 'Left'],
					],
					
			
			);
			// End thumbnail control
			
			// Title of clients
			$this->add_control(
				'title',
				[
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label' => esc_html__( 'Title', 'elementor-dyroth-widget' ),
					'label_on' => esc_html( 'Show', 'elementor-dyroth-widget' ),
					'label_off' => esc_html( 'Hide', 'elementor-dyroth-widget' ),
				
				],
			);
			// End title of clients

			// Excerpt
			$this->add_control(
				'excerpt',
				[
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label' => esc_html__( 'Excerpt', 'elementor-dyroth-widget' ),
					'label_on' => esc_html( 'Show', 'elementor-dyroth-widget' ),
					'label_off' => esc_html( 'Hide', 'elementor-dyroth-widget' ),
				
				],
			);
			// End excerpt

			// Image width
			$this->add_responsive_control(
				'image_width',
				[
					'label' => esc_html__( 'Image Width', 'elementor-dyroth-widget' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .image-width' => 'width: {{SIZE}}{{UNIT}};',
				],
				],
				
			);
		
			// End image width

        $this->end_controls_section();
		//End Layout section 
		
        // Query section under Content TAB
        $this->start_controls_section(
			'query_section',
			[
				'label' => esc_html__( 'Query', 'elementor-dyroth-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Offset setting
		$this->add_control(
			'offset',
			[
				'type' => \Elementor\Controls_Manager::NUMBER,
				'label' => esc_html__( 'Offset','elementor-dyroth-widget'),
				
			],
		);
		
		// End offset setting

		// Date setting
		// $this->add_control(
		// 	'date',
		// 	[
		// 		'label' => esc_html__( 'Date', 'plugin-name' ),
		// 		'type' => \Elementor\Controls_Manager::SELECT,
		// 		'default' => '',
		// 		'options' => [
		// 			'hour'  => esc_html__( 'Past Hour', 'plugin-name' ),
		// 			'day' => esc_html__( 'Past Day', 'plugin-name' ),	
		// 			'w' => esc_html__( 'Past Week', 'plugin-name' ),	
		// 			'monyhnum' => esc_html__( 'Past Month', 'plugin-name' ),	
		// 			'year' => esc_html__( 'Past Year', 'plugin-name' ),	
					
					
						
		// 		],
		// 	]
		// );
		// End date setting

		// Order setting
		$this->add_control(
			'order_by',
			[
				'label' => esc_html__( 'Order By', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'Date',
				'options' => [
					'date'  => esc_html__( 'Date', 'plugin-name' ),
					'title' => esc_html__( 'Title', 'plugin-name' ),	
					'menu_order' => esc_html__( 'Menu Order', 'plugin-name' ),
					'rand' => esc_html__( 'Random', 'plugin-name' ),
						
				],
			]
		);
		// End order setting

		// Order setting
		$this->add_control(
			'order',
			[
				'label' => esc_html__( 'Order', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => [
					'ASC'  => esc_html__( 'ASC', 'plugin-name' ),
					'DESC' => esc_html__( 'DESC', 'plugin-name' ),	
				],
			]
		);
		// End order setting

        $this->end_controls_section();

		//End Query section


		//Style TAB
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style', 'elementor-dyroth-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

      	$this->end_controls_section();
		//End Style TAB
		

	}
	
	//Render Function (Frontend display)
	protected function render() {
		$settings = $this->get_settings_for_display();//display function
		echo '<h3>' . $settings['heading'] . '</h3>';// heading display

		$number = $settings['number'];

		$col = $settings['column']; 

		$imagePosition = $settings['image_position']; 

		$title = $settings['title']; 
		$excerpt = $settings['excerpt'];
		$offset = $settings['offset'];
		// $date = $settings['date'];
		// var_dump($date); die;
		$orderBy = $settings['order_by'];
		$order = $settings['order'];
		
		?>

		<div class="container-widget">
			
				
					<?php
					$custom_post = new WP_Query(['post_type' => 'clients', 'posts_per_page' => $number, 'offset'=> $offset, 'orderby' => $orderBy, 'order'=>$order]);
						?>
						<?php
						if( $custom_post -> have_posts() ){
							while($custom_post -> have_posts()){
								$custom_post -> the_post();?>
								<div class="heading  thumbnail-<?php  esc_attr_e($imagePosition);?> col-<?php esc_attr_e($col); ?> ">
									<?php
									
									if($title && !($excerpt) ){
										?>
										<div class="image-width"><?php the_post_thumbnail();?></div>
										
										<div class="the-title"><?php the_title();?></div>
										<?php
									}
									elseif($excerpt && !($title)) {
										?>
										<div class="image-width"><?php the_post_thumbnail();?></div>
										<?php
										the_excerpt();
									}
									elseif($title && $excerpt){
										?>
										<div class="image-width"><?php the_post_thumbnail();?></div>
										
									<div class="the-title"><?php the_title();?></div>
									<?php
										the_excerpt();
									}
										else {
											?>
										<div class="image-width"><?php the_post_thumbnail();?></div>
										<?php
										};
									
									?>
									
							</div>
								<?php
								
							}
						}
					?>
			
			
		</div>
		<?php	
	}
	// End Render Section

	
}