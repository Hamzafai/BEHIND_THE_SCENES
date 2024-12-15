function showProfilePopup(){

    const root=document.querySelector('#branchc')
    const fenetre=document.createElement('div')
    fenetre.style.backgroundColor='red'
  
    var ul =document.createElement('ul')
    ul.id='ul'
  
    var one=document.createElement('li')
    one_a=document.createElement('a')
    one_a.href='html/personal/personalinfo.php'
    one_a.id='itemss'
    var one_p=createElment('p')
    one_p.id='p'
    one_p.textContent='Personal Info'
    one_p.style.marginTop='0.9em'
    one_a.appendChild(one_a)
    one.appendChild(one_a)
    ul.appendChild(one)
  
    var two=document.createElement('li')
    var two_a=document.createElement('a')
    two_a.href='html/personal/myteams.php'
    var two_p=document.createElment('p')
    two_p.id='p'
    two_p.textContent='My Teams'
    two_a.appendChild(two_p)
    two.appendChild(two_a)
    ul.appendChild(two)
  
    var three=document.createElement('li')
    var three_a=document.createElement('a')
    three_a.href='html/personal/myclubs.php'
    var three_p=document.createElement('p')
    three_p.id='p'
    three_p.textContent='My Clubs'
    three_a.appendChild(three_p)
    three.appendChild(three_a)
    ul.appendChild(three)
  
    var four=document.createElement('li')
    var form=document.createElement('form')
    form.action='php/logout_setup.php'
    form.method='post'
    var four_b=document.createElment('button')
    four_b.type='sybmit'
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
  
  }
  