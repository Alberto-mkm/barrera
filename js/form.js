const toastEl = document.querySelector('#toast-sucess')
const toastSuccess = new bootstrap.Toast(toastEl);

const req = {
    post: async (route, form, callback) => {
        await jQuery.post(site.api + route, jQuery(form).serializeArray()).done(callback)
    }
};
const rules = {
    nombre: { required: true, minlength: 2, maxlength: 100 },
    apellidos: { required: true, minlength: 2, maxlength: 100 },
    email: { required: true, minlength: 2, maxlength: 35, email: true },
    telefono: { required: true, minlength: 7, maxlength: 10 },
    pais: { required: true },
    estado: { required: true },
    ciudad: { required: true },
    message: { required: true, minlength: 2, maxlength: 500 },
};
const messages = {
    nombre: "El campo no puede ser vacio",
    apellidos: "El campo no puede ser vacio",
    email: "Formato de correo electrónico incorrecto",
    telefono: "¿A qué número podemos comunicar contigo?",
    pais: "Indique su país",
    estado: "En que estado se encuentra",
    ciudad: "Especifique la ciudad",
    message: "¿Cuál es el motivo de su envío?"
};
(($) => {
    $(document).ready(function () {
        const respContact = resp => {
            // resp.message
            toastSuccess.show()
        }

        $('#consulta').validate({
            rules: rules,
            messages: messages,
            submitHandler: (form) => {
                req.post('/contact', form, respContact)
            }
        });
    })
})(jQuery)
