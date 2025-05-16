// Script do menu responsivo
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

// Script do formulário de contato
const formContato = document.getElementById('form-contato');
const mensagem = document.getElementById('mensagem-enviada');

formContato.addEventListener('submit', (e) => {
  e.preventDefault(); // Evita recarregar a página
  mensagem.classList.remove('hidden'); // Mostra a mensagem
  formContato.reset(); // Limpa o formulário
});
