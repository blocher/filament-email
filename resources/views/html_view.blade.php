@php
    $email = $getRecord();
@endphp
<div style="width: 100%; height: 75vh;">
    <iframe srcdoc="{{ $email->html_body ?? '' }}" style="width: 100%; height: 100%;" seamless frameborder="0"></iframe>
</div>