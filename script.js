// window.addEventListener('DOMContentLoaded', () => {
var form = document.querySelector('form');
async function handleSubmit(event) {
  event.preventDefault();
  var data = new FormData(event.target);
  fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
      Accept: 'application/json',
    },
  })
    .then((response) => {
      if (response.ok) {
        alert('Заявка отправлена!');
        form.reset();
      }
    })
    .catch((error) => {
      alert('Что-то пошло не так :( ', error);
    });
}
form.addEventListener('submit', handleSubmit);
// });
