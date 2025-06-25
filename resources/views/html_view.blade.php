<x-filament-forms::field-wrapper :id="$this->getId()" :label="$this->getLabel()" :label-sr-only="$this->isLabelHidden()" :helper-text="$this->getHelperText()" :hint="$this->getHint()" :hint-icon="$this->getHintIcon()" :required="$this->isRequired()" :state-path="$this->getStatePath()">
    <div>
        <iframe style="width: 100%; height:75vh;" srcdoc=" {{$getState() }}" seamless frameborder="0"></iframe>
    </div>
</x-filament-forms::field-wrapper>
