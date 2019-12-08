

function validateEmail(){
    const email = $('#email').val();
    //var re = /^[a-zA-z0-9.]*\@[a-zA-Z.]*/g;
    if (!email.match(/^[a-zA-z0-9.]*\@[a-zA-Z.]*/)) {
        alert('Enter a valid email!');
        return false;
    }


}

function validateName(){
    const name = $('#name').val();
    var re =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
    if (re.test(name)) {
        alert('Name cannot contain numbers!');
        return false;
    }

}

function validateContact(){
    const contact = $('#contact').val();
    var re = new RegExp(/[~`A-Za-z!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
        if (re.test(contact)) {
        alert('Contact cannot contain letters!');
        return false;
    }
}
