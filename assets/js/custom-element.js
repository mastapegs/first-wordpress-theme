class CustomElement extends HTMLElement {
    constructor() {
        super();

        const template = document.createElement("template");
        template.innerHTML = `
            <style>
                :host {
                    display: block;
                    background: white;
                    padding: 20px;
                    border: 1px solid black;
                    border-radius: 5px;
                    box-shadow: 10px 5px 5px hsla(0, 0%, 0%, 0.5);
                }
            </style>
            <p>Rendered within a custom element! This paragraph is client-side rendered inside the element.</p>
            <slot></slot>
        `;

        const shadowRoot = this.attachShadow({mode: 'open'});
        shadowRoot.appendChild(template.content.cloneNode(true));
    }
}
customElements.define('custom-element', CustomElement);