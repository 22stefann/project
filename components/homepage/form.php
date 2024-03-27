<style>
    .form-holder {
        background-color: <?php echo $formBgColor; ?>;
        color: <?php echo $formTextColor; ?>;
        max-width: 100%;
        .form-floating {
            padding-left: 0;
            padding-right: 0;
        }
        form {
            width: <?php echo $formWidth; ?>;
            margin: 0 auto;
            color: <?php echo $formInputColorText; ?>;
        }
        button {
            width: 100% !important;
        }
        <?php if ( !empty( $formBgImage ) ) : ?>
            background-image: url("<?php echo $formBgImage; ?>");
        <?php endif; ?>
    }
    @media (max-width: 767px) {
        .form-holder {
            form {
                width: 90%;
            }
        }
    }
</style>
<div class="form-holder container mx-auto all-section-style text-<?php echo $formTextAlign; ?>">
    <?php echo setVariable($formTitle,"h2","subtitle-h2"); ?>
    <?php echo setVariable($formText,"p"); ?>
    <form class="row g-3 needs-validation" novalidate>
        <div class="form-floating pb-2">
            <input type="text" class="form-control" id="name" name="name" placeholder="" required>
            <label for="last-name">Ime</label>
            <div class="valid-feedback">
                Ime je dobro!
            </div>
            <div class="invalid-feedback">
                Molimo vas unesite ime
            </div>
        </div>
        <div class="form-floating pb-2">
            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="" required>
            <label for="last-name">Prezime</label>
            <div class="valid-feedback">
                Prezime je dobro!
            </div>
            <div class="invalid-feedback">
                Molimo vas unesite prezime
            </div>
        </div>
        <div class="form-floating pb-2">
            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
            <label for="email">Email</label>
            <div class="valid-feedback">
                Email je dobar!
            </div>
            <div class="invalid-feedback">
                Molimo vas unesite email
            </div>
        </div>
        <div class="form-floating pb-2">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
            <label for="phone">Telefon</label>
            <div class="valid-feedback">
                Telefon je dobar!
            </div>
            <div class="invalid-feedback">
                Molimo vas unesite telefon
            </div>
        </div>
        <div class="form-floating pb-2">
            <input type="text" class="form-control" id="message" name="message" placeholder="">
            <label for="message">Poruka</label>
            <div class="valid-feedback">
                Poruka je dobra!
            </div>
        </div>
        <button class="btn btn-custom-style form" type="submit">Prosledi</button>
    </form>

</div>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Check if the form is valid before sending data
        if (this.checkValidity()) {
            // Your form data
            var formData = new FormData(this);

            fetch('contactscript.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.status === 'success') {
                    // Optionally, you can reset the form
                    this.reset();
                    console.log(this);
                    this.classList.remove("was-validated");
                }
            })
            .catch(error => {
                //console.error('Error:', error);
                alert('Greška pri slanju poruke.');
            });
        } else {
            // Handle the case where the form is not valid
            alert('Molimo popunite sva obavezna polja ispravno.');
        }
    });
});
</script>
