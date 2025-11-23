<section class="form">
    <h2 class="form__title">Nezávazná poptávka</h2>
    <div class="wrapper">
        <form class="form-order" action="{{ route('mail') }}" method="post" enctype='multipart/form-data'>
            @csrf
            @method('POST')
            <fieldset class="form-order__group">
                <div class="form-order__contacts">
                    <label class="form-order__label">
                        <x-input-error :messages="$errors->get('client_name')" />
                        <input value="{{ old('client_name') }}" class="form-order__input" type="text" name="client_name" placeholder="Jméno" aria-label="Uveďte jméno" required>
                        
                    </label>
                    <label class="form-order__label">
                        <x-input-error :messages="$errors->get('client_phone')" />
                        <input value="{{ old('client_phone') }}" class="form-order__input" type="tel" name="client_phone" placeholder="Tel.číslo" aria-label="Uveďte telefonní číslo" required>
                        
                    </label>
                    <label class="form-order__label">
                        <x-input-error :messages="$errors->get('client_email')" />
                        <input value="{{ old('client_email') }}" class="form-order__input" type="email" name="client_email" aria-label="Uveďte email" placeholder="E-mail">
                    </label>
                    <label class="form-order__label form-order__label--custom" tabindex="0">
                        <x-input-error :messages="$errors->get('client_file')" />
                        <input class="form-order__input form-order__input--custom" type="file" name="client_file" id="fileInput" style="display: none;" onchange="updateButtonText()" aria-label="Nahrajte soubor" accept=".jpg, .jpeg, .png, .pdf, .gif" maxlength="2097152">
                        <span id="buttonText">Nahrát soubor</span>
                    </label>
                </div>
            </fieldset>
            <fieldset class="form-order__group form-order__group--comments">
                <div class="form-order__comments">
                    <label class="form-order__label">
                        <x-input-error :messages="$errors->get('client_comment')" />
                        <textarea value="{{ old('client_comment') }}" class="form-order__comment" name="client_comment" rows="5" aria-label="Přidejte komentář" placeholder="Dotaz"></textarea>
                    </label>
                </div>
            </fieldset>
            <button class="form__button button button-secondary">Odeslat</button>
        </form>
    </div>
</section>

@if ($errors->any())
    <script>
        window.onload = function() {
            document.getElementById('form').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
@endif