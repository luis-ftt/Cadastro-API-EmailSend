document.getElementById('emailForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const domain = document.getElementById('emailFilter').value;
    if(!domain){
        document.getElementById('result').innerHTML = '';
        return;
    }
    fetch(`/filter-emails?domain=${domain}`)
    .then(res => res.json())
    .then(data => {
        if(data.length == 0){
            document.getElementById('result').innerHTML = 'Zero resultados';
            return;
        }
        console.log(data);
        let html = "<ul>";
        data.forEach(usuario => {
            html += `<li> ${usuario.name} - ${usuario.email}</li>`;
        });

        html += "</ul>";
        document.getElementById('result').innerHTML = html;
    })
.catch(err => {
    console.log(err);
    document.getElementById('result').innerHTML = 'erro na busca';
    });
});
