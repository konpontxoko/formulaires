class FormulaireMenu extends HTMLElement {
  constructor() {
    super();

    const shadow = this.attachShadow({mode: 'open'});

    const wrapper = document.createElement('div');
    wrapper.classList.add('Menu');

    const style = document.createElement('style');
    style.textContent = `
    .Menu {
      position: fixed;
      top: 0px;
      right: 0px;
      padding: 5px;
      background: #ccc;
    }`;

    shadow.appendChild(style);
    shadow.appendChild(wrapper);
    this.wrapper = wrapper;
  }
  connectedCallback() {
    const wrapper = this.wrapper;
    const link = document.createElement('a');
    link.classList.add('Menu-link');
<<<<<<< HEAD:menu.js
    link.setAttribute('href', './admin.php');
    link.textContent = 'alex-Administration';
=======
    link.setAttribute('href', '/boutik/admin.php');
    link.textContent = 'ADMIN BOUTIK';
>>>>>>> main:js/menu.js
    wrapper.appendChild(link);
  }
}

customElements.define('formulaire-menu', FormulaireMenu);
