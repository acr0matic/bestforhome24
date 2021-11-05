const forms = document.querySelectorAll('form');
_.forEach(forms, form => new Form(form));