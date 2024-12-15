const navbarLinks = document.querySelector(".navbar-links");
const loginNav = document.querySelector(".navbar-login");
const nav = document.querySelector("nav");
const to_see=document.querySelector("#to_see").value

function toggleMenu() {
  const links = document.querySelector(".navbar-links");
  const loginButton = document.querySelector(".navbar-login");
  links.classList.toggle("show");
  //loginButton.classList.toggle("show");

  if(to_see!=='boo'){
    showProfilePopup_mini()
  }
}

window.addEventListener("scroll", function() {
  const header = document.querySelector("header");
  if (window.scrollY > 50) {  // Change 50 to the amount of scroll you prefer
      header.style.backgroundColor = "#ffffffee"; // Set to white on scroll
  } else {
      header.style.backgroundColor = "#f4f5f9"; // Reset to grey when at the top
  }
});

function showProfilePopup(){
  const existingFenetre = document.querySelector('.fenetre');

  if(existingFenetre){
    existingFenetre.remove();
    document.body.style.overflow = ""; // Restore scrolling
  } else {

  const root=document.querySelector('#branchc')
  const fenetre=document.createElement('div')
  fenetre.classList.add('fenetre')
  var ul =document.createElement('ul')
  ul.id='ul'

  var one=document.createElement('li')
  var one_a=document.createElement('a')
  var one_p=document.createElement('p')

  if(to_see){
    one_a.href='html/personal/personalinfo.php'
    one_p.textContent='Personal Info'
  } else {
    one_a.href='html/personal/clubinfo.php'
    one_p.textContent='Club Info'
  }
  one_a.id='itemss'
  one_p.id='p'
  one_p.style.marginTop='0.9em'
  one_a.appendChild(one_p)
  one.appendChild(one_a)
  ul.appendChild(one)

  var two=document.createElement('li')
  var two_a=document.createElement('a')
  var two_p=document.createElement('p')
  if(to_see){
    two_a.href='html/personal/myteams.php'
    two_p.textContent='My Teams'
  } else {
    two_a.href='html/personal/myevents.php' 
    two_p.textContent='My Events'   
  }
  two_a.id='itemss'
  two_p.id='p'
  two_a.appendChild(two_p)
  two.appendChild(two_a)
  ul.appendChild(two)

  var three=document.createElement('li')
  var three_a=document.createElement('a')
  var three_p=document.createElement('p')
  if(to_see){
    three_a.href='html/personal/myclubs.php'
    three_p.textContent='My Clubs'

  } else {
    three_a.href='html/personal/administration_members.php'
    three_p.textContent='My Admin'
  }
  three_a.id='itemss'
  three_p.id='p'
  three_a.appendChild(three_p)
  three.appendChild(three_a)
  ul.appendChild(three)

  var four=document.createElement('li')
  var form=document.createElement('form')
  form.action='php/logout_setup.php'
  form.method='post'
  form.id='formm'
  var input = document.createElement('input');

  var four_b=document.createElement('button')
  four_b.type='submit'
  four_b.id='button'
  four_b.textContent='Log out'
  var four_i=document.createElement('img')
  four_i.src='img/pfp/logout.svg'
  four_i.alt='Logout Icon'
  four_i.style.width='20px'
  four_i.style.height='20px'
  four_i.style.marginLeft='5px'
  form.appendChild(four_b)
  form.appendChild(four_i)
  four.appendChild(form)
  ul.appendChild(four)

  fenetre.appendChild(ul)
  root.appendChild(fenetre)
  document.querySelectorAll('#p').forEach(function(e) {
      e.style.fontSize = '16px';                         // Apply the style to each element
  });

}

}

function showProfilePopup_mini() {
  const touche = document.querySelector('.navbar-links')
  const hrElement =document.createElement('hr')
  hrElement.style.border = 'none';
  hrElement.style.height = '3px';
  hrElement.style.backgroundColor = '#000';

  touche.appendChild(hrElement );
  var li = document.createElement('li')
  var li_a = document.createElement('a')
  if(to_see){
      li_a.href = 'html/personal/personalinfo.php'
      li_a.textContent = 'Personal Info'
  } else {
      li_a.href = 'html/personal/clubinfo.php'
      li_a.textContent = 'Club Info'
  }
  li.appendChild(li_a);
  touche.appendChild(li)

  li = document.createElement('li')
  li_a = document.createElement('a')
  if (to_see) {
    li_a.href = 'html/personal/myclubs.php'
    li_a.textContent = 'My clubs'
  } else {
    li_a.href = 'html/personal/myevents.php'
    li_a.textContent = 'My events'
  }
  li.appendChild(li_a)
  touche.appendChild(li)

  li = document.createElement('li')
  li_a = document.createElement('a')
  if (to_see) {
    li_a.href = 'html/personal/myteams.php'
    li_a.textContent = 'My Teams'
  } else {
    li_a.href = 'html/personal/administration_members.php'
    li_a.textContent = 'My Admin'
  }
  li.appendChild(li_a)
  touche.appendChild(li)

  li = document.createElement('li')
  var li_f = document.createElement('form')
  li_f.action = 'php/logout_setup.php'
  li_f.method = 'post'
  li_f.id='formm'
  var li_f_b = document.createElement('button')
  li_f_b.type = 'submit'
  li_f_b.id = 'button'
  li_f_b.textContent = 'Log out'
  li_f.appendChild(li_f_b)

  var li_f_i = document.createElement('img')
  li_f_i.src = 'img/pfp/logout.svg'
  li_f_i.alt = 'Logout icon'
  li_f_i.style.width = '20px'
  li_f_i.style.height = '20px'
  li_f_i.style.marginLeft = '5px'
  li_f.appendChild(li_f_i)

  li.appendChild(li_f)
  touche.appendChild(li)
}
