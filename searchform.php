<form role="search" method="get" id="searchform" class="searchform container" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-field">
        <input class="autocomplete center-align" id="search" type="search" placeholder="Buscar" name="s"
            required>
        <label class="label-icon black-text " for="search">
            <i class="material-icons black-text">search</i>
        </label>
        <i class="material-icons">close</i>
    </div>
</form>