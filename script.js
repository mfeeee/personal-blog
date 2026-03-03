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

    setTimeout(() => {
        container.classList.remove('active');
    }, 200);
}

function openAddForm() {
    const container = document.getElementById('main-container');
    const panel = document.getElementById('dynamic-content');

    panel.innerHTML = `
        <form action="new.php" method="POST" class="admin-form">
            <div>
                <label>Article Title</label>
                <br/>
                <input type="text" name="title" required>
            </div>

            <div>
                <label>Publishing Date</label>
                <br/>
                <input type="date" name="date" required>
            </div>

            <div>
                <label>Content</label>
                <textarea name="content" id="content" rows="10"></textarea>
            </div>

            <button type="submit" class="btn-publish">Publish</button>
            <a href="index.php" class="post-delete" id="cancel">Cancel</a>
        </form>
    `;
    
    container.classList.add('active');
    panel.style.opacity = 1;
}

function openEditForm(id, title, date, content) {
    const container = document.getElementById('main-container');
    const panel = document.getElementById('dynamic-content');
    
    panel.innerHTML = `
        <form action="edit.php" method="POST" class="admin-form">
            <h2>Edit Article</h2>
            <input type="hidden" name="id" value="${id}">
            
            <div>
                <label>Title</label>
                <input type="text" name="title" value="${title}" required>
            </div>
            <div>
                <label>Date</label>
                <input type="date" name="date" value="${date}" required>
            </div>
            <div>
                <label>Content</label>
                <textarea name="content" rows="10" required>${content}</textarea>
            </div>
            <button type="submit" class="btn-publish">Update Article</button>
            <a href="index.php" class="btn-cancel">Cancel</a>
        </form>
    `;
    
    container.classList.add('active');
    panel.style.opacity = 1;
}