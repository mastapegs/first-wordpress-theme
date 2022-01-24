import { html, css, LitElement } from 'lit';
import { customElement } from 'lit/decorators.js';

@customElement('custom-element')
export class CustomElement extends LitElement {
    static styles = css`
        :host {
            display: block;
            background: white;
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
            box-shadow: 10px 5px 5px hsla(0, 0%, 0%, 0.5);
        }
    `;

    render() {
        return html`
            <p>Rendered within a custom element! This paragraph is client-side rendered inside the element.</p>
            <slot></slot>
        `;
    }
}
