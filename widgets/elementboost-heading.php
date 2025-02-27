<?php
class Elementboost_Heading extends \Elementor\Widget_Base
{

    public function get_name(): string
    {
        return 'elementboost_heading';
    }

    public function get_title(): string
    {
        return esc_html__('ElementBoost Heading', 'elementboost');
    }

    public function get_icon(): string
    {
        return 'eicon-code';
    }

    public function get_categories(): array
    {
        return ['elementboost-category'];
    }

    public function get_keywords(): array
    {
        return ['heading', 'elementboost'];
    }

    protected function render(): void
    {
        ?>

        <?php
    }
}