const contents = {
    'creating-space': `
        <h2>Creating Space</h2>
        <p>Conteúdo específico sobre design e clareza para o blog da Maria.</p>
    `,
    'automation': `
        <h2>Automation in Business</h2>
        <p>Como automatizar processos usando Laravel e outras ferramentas.</p>
    `
};

function changeContent(title, body) {
    const container = document.getElementById('main-container');
    const panel = document.getElementById('dynamic-content');
    
    panel.style.opacity = 0;
    
    setTimeout(() => {
        panel.innerHTML = `
            <h2>${title}</h2>
            <div class="article-body">${body}</div>
        `;
        panel.style.opacity = 1;
        container.classList.add('active');
    }, 200);
}

function closeContent() {
    const container = document.getElementById('main-container');
    container.classList.remove('active');
}
