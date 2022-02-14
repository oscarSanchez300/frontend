<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const getUser = () => {
        axios.get('http://127.0.0.1:8000/api/dataAPI')
            .then(data => {
                console.log(data.data);
                const tbody = document.getElementById('tableID');

                data.data.map(user => {

                    const fila = document.createElement('tr');

                    const name = document.createElement('td');
                    const email = document.createElement('td');
                    const website = document.createElement('td');

                    name.innerHTML = user.name;
                    email.innerHTML = user.email;
                    website.innerHTML = user.website;

                    fila.append(name);
                    fila.append(email);
                    fila.append(website);

                    tbody.append(fila);
                   
                })

                    console.log(tbody);
            })
            .cath(console.log);
           
    }

    window.onload = function() {
        getUser();
    };
</script>