let testBtn = document.getElementById("test");
testBtn.addEventListener("click", testar);
async function testar(){
    let newUser = {
        username: document.getElementById("usernameS").value,  
        password: document.getElementById("passwordS").value,
    }
    let data = new FormData()
    data.append("endpoint", "saveuser")
    data.append("newUser", JSON.stringify(newUser))
    let response = await makeRequest("./php/recievers/signup.php", "POST", data)
    console.log(response)
}
async function makeRequest(url, inputMethod, body){
    try{
        let response = await fetch(url, {method: inputMethod, body})
        return response.json()
    }catch(error){
        console.log(error)
    }
}