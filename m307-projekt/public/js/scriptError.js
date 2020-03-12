addEventListener("load", function(){
    document.querySelector('#errorForm').addEventListener('submit', function(evt) {

        var fields = [
            {id: 'name', message: 'Bitte Name eingeben!'},
            {id: 'email', message: 'Bitte Email eingeben!'},
        ];
        document.querySelectorAll('.has-error').forEach(element => element.classList.remove('has-error'));
        document.querySelectorAll('label .error-msg').forEach(element => element.remove());
        fields.forEach(function(field) {
            var fieldElement = document.querySelector('#' + field.id);
            if(fieldElement.value === '') {
              evt.preventDefault();
                var errorMessage = document.createElement("span");
                errorMessage.classList.add("error-msg");
                errorMessage.textContent = field.message
                const formGroup = fieldElement.parentElement
                formGroup.classList.add('has-error')
                formGroup.querySelector('label')
                    .append(errorMessage);
            }
        });
    });
});
