@php
    $model = $attributes['name'] ?? $attributes->wire('model')->value();
    $id = SmirlTech\LaravelForm\Helpers\Helpers::modelToFucntionName($model);
@endphp

<div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text">
                          <i class="fas fa-key"></i>

        </span>
        </div>
        <x-form::input  id="{{$id}}" type="password" :group="false" {{ $attributes }}/>
        <div class="input-group-append">
            <button onclick="tooglePassword()" class="btn btn-primary" type="button" id="emailVerifyBtn">
                <i id="icon-{{$id}}" class="fa fa-eye">
                </i>
            </button>
        </div>

    </div>
    <script>
        function tooglePassword() {
            let input = document.getElementById('{{$id}}');
            let icon = document.getElementById('icon-{{$id}}');
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</div>

