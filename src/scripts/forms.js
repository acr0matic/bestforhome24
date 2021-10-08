const forms = document.querySelectorAll('form:not(.calculator)');
_.forEach(forms, form => new Form(form));