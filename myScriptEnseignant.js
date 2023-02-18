function m() {
    if (document.getElementById('connButton2').value=='Connexion') {
        document.getElementById('connButton2').value='Annuler';
        document.getElementsByClassName('login')[0].style.display='flex';
        document.getElementsByClassName('login')[1].className='connexion';
        document.getElementById('connButton').style.display=none;
    }else
    {
        document.getElementById('connButton2').value='Connexion';
        document.getElementById('loginButton').className='login';
        document.getElementsByClassName('login')[0].style.display='none';

    }
}
function f() {
    document.getElementById('contactForm').style.display='flex';
}
