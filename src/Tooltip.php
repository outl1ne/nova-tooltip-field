<?php

namespace Outl1ne\NovaTooltipField;

use Laravel\Nova\Fields\Expandable;
use Laravel\Nova\Fields\Field;

class Tooltip extends Field
{
    use Expandable;

    public $component = 'o1-tooltip-field';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->textAlign('center');
        $this->placement('top');
        $this->iconPosition('left');
    }

    public function text($text)
    {
        return $this->withMeta(['text' => $text]);
    }

    public function iconFromPath($iconPath)
    {
        return $this->withMeta(['iconPath' => file_get_contents($iconPath)]);
    }

    public function iconFromUrl($iconUrl)
    {
        return $this->withMeta(['iconUrl' => $iconUrl]);
    }

    public function iconPosition($iconPosition)
    {
        return $this->withMeta(['iconPosition' => $iconPosition]);
    }

    public function content($content)
    {
        return $this->withMeta(['content' => $content]);
    }

    public function placement($placement)
    {
        return $this->withMeta(['placement' => $placement]);
    }

    public function allowTooltipHTML($allowHtml = true)
    {
        return $this->withMeta(['allowHtml' => $allowHtml]);
    }

    public function resolve($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);
        return $this->withMeta(['id' => "{$resource->id}-{$attribute}"]);
    }

    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            'shouldShow' => $this->shouldBeExpanded(),
        ]);
    }
}
