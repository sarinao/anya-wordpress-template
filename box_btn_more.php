<?php
if ( ! defined( 'ABSPATH' ) ) exit; // جلوگیری از دسترسی مستقیم

class Elementor_Widget_Btn_More extends \Elementor\Widget_Base {

    public function get_name() {
        return 'btn_more';
    }

    public function get_title() {
        return __( '  دکمه', 'anya-theme' );
    }

    public function get_icon() {
        return '';
    }

    public function get_categories() {
        return [ 'Anya-widgets' ]; // دسته‌بندی سفارشی
    }

    protected function _register_controls(){
        $this->start_controls_section(  
            'button_section',  
            [  
            'label' => __( 'تنظیمات دکمه', 'anya-theme' ),  
            ]  
            );  
            $this->add_control(  
                'button_text',  
                [  
                'label' => __( 'متن دکمه', 'anya-theme' ),  
                'type' => \Elementor\Controls_Manager::TEXT,  
                'default' => __( 'دکمه', 'anya-theme' ),  
                ]  
                );  
               
                $this->add_control(  
                'button_url',  
                [  
                'label' => __( 'آدرس لینک', 'anya-theme' ),  
                'type' => \Elementor\Controls_Manager::URL,  
                'default' => [  
                'url' => '#',  
                ], 
                'dynamic' => [  
                    'active' => true,  
                ],   
                ]  
                );  
               
                $this->end_controls_section();  
                
    }
    protected function render(){
        $settings = $this->get_settings_for_display();  
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : 'دکمه';  
        $button_url = !empty($settings['button_url']['url']) ? esc_url($settings['button_url']['url']) : '#';  
            ?>  
                <div class="box_btn_more code1">  
                     <a href="<?php echo $button_url; ?>" class="code1"><?php echo $button_text; ?></a>  
                </div>  
            <?php 
        
    } 
}
