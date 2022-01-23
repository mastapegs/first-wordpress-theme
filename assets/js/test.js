const ul = document.querySelector("#test-ul");

const numbers = [
    'This page has a combination of',
    'server-side rendered DOM elements via PHP',
    'and client-side rendered DOM elements via JavaScript.',
    '',
    'The &lt;li&gt;\'s in this list, were client-rendered.',
    'Everything else was SSR.',
    '',
    'WHOOOO!!!!',
    '⚡⚡⚡⚡',
];
ul.innerHTML = `
    ${numbers.map((li) => `<li>${li}</li>`).join('')}
`;
