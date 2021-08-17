let loginBtn = document.getElementById('loginBtn');

loginBtn.addEventListener('click', async () => {
    console.log("%c Helloooooo", "color: pink")
    let loginName = document.getElementById('usernameLogin').value;
    let loginPwd = document.getElementById('passwordLogin').value;

    let data = new FormData();
    data.append('loginName', JSON.stringify(loginName));
    data.append('loginPwd', JSON.stringify(loginPwd));
    let response = await MakeRequest('./php/recievers/login.php', 'POST', data);
    console.log(response);
    
})


async function MakeRequest(url, inputMethod, body) {
    try{
        let response = await fetch(url, { method: inputMethod, body });
        return response.json();
        /* let response = await fetch('./php/recievers/login.php') */
    } catch(error) {
        console.log(error);
    }
}