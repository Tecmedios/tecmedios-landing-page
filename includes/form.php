<form 
    action="https://formspree.io/f/<?php echo $formId; ?>"
    id="contact-form"
>
    <label for="nombre">
        Nombre
        <input type="text" name="nombre" required>
    </label>
    <label for="email">
        Email
        <input type="email" name="email" required>
    </label>
    <label for="asunto">
        Asunto
        <input type="text" name="asunto" required>
    </label>
    <label for="message">
        Mensaje
        <textarea name="message" rows="4" cols="50" required></textarea>
    </label>
    <button class="button primary-button md-button" type="submit">
        <i class="fa-regular fa-envelope"></i> <?= $form['sendBtnText'] ?>
    </button>
    <div id="form-success-message" style="display: none;">
        <?= $form['successMsj'] ?>
    </div>
    <div id="form-error-message" style="display: none;">
        <?= $form['errorMsj'] ?>
    </div>
</form>