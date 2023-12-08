
function printf(element, message) {
    document.querySelector(element).textContent = message;
  }
  
  
  let firstName = document.querySelector('#name');
  let lastName = document.querySelector('.#email');
  let mail = document.querySelector('.email');
  let phoneNumber = document.querySelector('.phoneNumber');
  let userMessage = document.querySelector('.textarea-form');
  let btnSubmit = document.querySelector('.btn-submit');
  let invalidCheck = document.querySelector('#invalidCheck');
  
  mailInfo = fName = LastN = phone = messageInfo = checkIsValid = false;
  
  
  btnSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    if (firstName.value === '' && !firstName.value.match(/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u)) {
      printf('.ErroFName', "Invalide Info");
      firstName.style.border = "red 2px solid";
      fName = false;
    }
    else {
      printf('.ErroFName', "");
      firstName.style.border = "green 2px solid"
      fName = true;
    }
  
    if (lastName.value === '' && !lastName.value.match(/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u)) {
      printf('.ErroLName', "Invalide Info");
      lastName.style.border = "red 2px solid";
      LastN = false;
    }
    else {
      printf('.ErroLName', "");
      lastName.style.border = "green 2px solid";
      LastN = true;
    }
  
    if (mail.value === '' || !mail.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
      printf('.ErroMail', 'input is not valid');
      mail.style.border = "2px solid red";
      mailInfo = false;
    }
    else if (mail.value !== '') {
      mail.style.border = "2px solid green";
      printf('.ErroMail', '');
      mailInfo = true;
    }
  
    if (phoneNumber.value === '' || !phoneNumber.value.match(/(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}/)) {
  
      printf('.ErroPhone', 'invalid phone number');
      phoneNumber.style.border = "2px solid red";
      phone = false;
    }
    else if (phoneNumber.value !== '') {
      phoneNumber.style.border = "2px solid green";
      printf('.ErroPhone', '');
      phone = true;
    }
  
    if (userMessage.value === '') {
      printf('.ErroText', 'invalid Message');
      userMessage.style.border = "2px solid red";
      messageInfo = false;
    }
    else if (userMessage.value !== '') {
      userMessage.style.border = "2px solid green";
      printf('.ErroText', '');
      messageInfo = true;
    }
  
    if(!invalidCheck.checked)
    {
      printf('.ErroCheck', "please Agree");
      checkIsValid = false;
    }
    else if(invalidCheck.checked)
    {
      printf('.ErroCheck', "");
      checkIsValid = true;
    }
  
  
    if (mailInfo === true && fName === true && LastN === true && phone === true && messageInfo === true && checkIsValid === true) {
        var params = {
          name: firstName.value,
          email: mail.value,
          phoneNmbr: phoneNumber.value,
          userMessage: userMessage.value
        }
        document.querySelector('.popUP').style.opacity = 1;
          setTimeout(() => {
            document.querySelector('.popUP').style.opacity = 0;
          }, 2000);
      
      const serviceID = 'service_k94s7qg';
      const themplateID = "template_dcvddqj";
      emailjs.send(serviceID, themplateID, params).then(
        (res) => {
          name.value = "";
          email.value = "";
          phoneNmbr.value = "";
          userMessage.value = "";
          console.log(res);
        }).catch(err=>console.log(err));
      }
      
  })
  