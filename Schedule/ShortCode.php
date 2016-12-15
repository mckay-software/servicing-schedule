<?php

namespace Schedule;

class ShortCode
{
    protected $defaults;
    protected $installed = false;
    protected $tag;

    public function __construct($tag, $defaults = [])
    {
        $this->tag = $tag;
        $this->defaults = $defaults;
    }

    public function handle($attributes = [], $content = null, $tag = '')
    {
        $attributes = $this->normaliseAttributes($attributes, $tag);
    }

    public function install()
    {
        if (!$this->installed) {
            $this->installed = true;
            add_shortcode($this->tag, function ($a = [], $c = null, $t = '') {
                $this->handle($a, $c, $t);
            });
        }
    }

    protected function normaliseAttributes($attributes, $tag)
    {
        return shortcode_atts(
            $this->defaults,
            array_change_key_case((array) $attributes, CASE_LOWER),
            $tag
        );
    }
}
