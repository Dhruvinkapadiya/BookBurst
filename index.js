function  non_fiction() {
    if(document.getElementById('non-fiction').style.display === 'flex')
    {
        document.getElementById('non-fiction').style.display='flex';
        document.getElementById('edited').style.display='none';
        document.getElementById('reference').style.display='none';
        document.getElementById('fiction').style.display='none';
    }
    else
    {
        document.getElementById('non-fiction').style.display='flex';
        document.getElementById('edited').style.display='none';
        document.getElementById('reference').style.display='none';
        document.getElementById('fiction').style.display='none';
    }
}

function  edited() {
    if(document.getElementById('edited').style.display === 'none')
    {
        document.getElementById('edited').style.display='flex';
        document.getElementById('non-fiction').style.display='none';
        document.getElementById('reference').style.display='none';
        document.getElementById('fiction').style.display='none';
    }
    else
    {
        document.getElementById('edited').style.display='flex';
        document.getElementById('non-fiction').style.display='none';
        document.getElementById('reference').style.display='none';
        document.getElementById('fiction').style.display='none';
    }
}


function  fiction() {
    if(document.getElementById('fiction').style.display === 'none')
    {
        document.getElementById('fiction').style.display='flex';
        document.getElementById('edited').style.display='none';
        document.getElementById('non-fiction').style.display='none';
        document.getElementById('reference').style.display='none';
    }
    else
    {
        document.getElementById('fiction').style.display='flex';
        document.getElementById('edited').style.display='none';
        document.getElementById('reference').style.display='none';
        document.getElementById('non-fiction').style.display='none';
    }
}


function  reference() {
    if(document.getElementById('fiction').style.display === 'none')
    {
        document.getElementById('reference').style.display='flex';
        document.getElementById('fiction').style.display='none';
        document.getElementById('edited').style.display='none';
        document.getElementById('non-fiction').style.display='none';
    }
    else
    {
        document.getElementById('reference').style.display='flex';
        document.getElementById('edited').style.display='none';
        document.getElementById('fiction').style.display='none';
        document.getElementById('non-fiction').style.display='none';
    }
}


function darkmode()
{
    const dark = document.getElementById('main').style.backgroundcolor='white';
    if(dark)
    {
        document.getElementById('main').style.backgroundColor='black';
        document.getElementById('dark').style.color='white';
        document.getElementById('nav').style.color='white';
        document.getElementById('home').style.color='white';
        document.getElementById('services').style.color='white';
        document.getElementById('services1').style.borderColor='white';
        document.getElementById('services2').style.borderColor='white';
        document.getElementById('services3').style.borderColor='white';
        document.getElementById('about').style.color='white';
        document.getElementById('categories').style.color='white';
        document.getElementById('catbtn1').style.color='white';
        document.getElementById('catbtn2').style.color='white';
        document.getElementById('catbtn3').style.color='white';
        document.getElementById('catbtn4').style.color='white';
        document.getElementById('contact').style.color='white';
        document.getElementById('footer').style.color='white';
        document.getElementById('homenav').style.color='white';
        document.getElementById('aboutnav').style.color='white';
        document.getElementById('categoriesnav').style.color='white';
        document.getElementById('contactnav').style.color='white';
        document.getElementById('loginnav').style.color='white';
        document.getElementById('input1').style.backgroundColor='black';
        document.getElementById('input1').style.borderColor='white';
        document.getElementById('input2').style.backgroundColor='black';
        document.getElementById('input2').style.borderColor='white';
        document.getElementById('input3').style.backgroundColor='black';
        document.getElementById('input3').style.borderColor='white';
        document.getElementById('input4').style.backgroundColor='black';
        document.getElementById('input4').style.borderColor='white';
        document.getElementById('facebook').style.color='white';
        document.getElementById('twitter').style.color='white';
        document.getElementById('insta').style.color='white';
        document.getElementById('linkdin').style.color='white';
        document.getElementById('darklogo').style.display='block';
        document.getElementById('lightlogo').style.display='none';
        document.getElementById('darklogo2').style.display='block';
        document.getElementById('lightlogo2').style.display='none';
        document.getElementById('footer').style.backgroundColor='black';
    }
    else{
        document.getElementById('main').style.backgroundColor='white';
        document.getElementById('dark').style.color='black';
        document.getElementById('nav').style.color='black';
        document.getElementById('home').style.color='black';
        document.getElementById('services').style.color='black';
        document.getElementById('services1').style.borderColor='black';
        document.getElementById('services2').style.borderColor='black';
        document.getElementById('services3').style.borderColor='black';
        document.getElementById('about').style.color='black';
        document.getElementById('categories').style.color='black';
        document.getElementById('catbtn1').style.color='black';
        document.getElementById('catbtn2').style.color='black';
        document.getElementById('catbtn3').style.color='black';
        document.getElementById('catbtn4').style.color='black';
        document.getElementById('contact').style.color='black';
        document.getElementById('footer').style.color='black';
        document.getElementById('homenav').style.color='black';
        document.getElementById('aboutnav').style.color='black';
        document.getElementById('categoriesnav').style.color='black';
        document.getElementById('contactnav').style.color='black';
        document.getElementById('loginnav').style.color='black';
        document.getElementById('input1').style.backgroundColor='black';
        document.getElementById('input1').style.borderColor='black';
        document.getElementById('input2').style.backgroundColor='black';
        document.getElementById('input2').style.borderColor='black';
        document.getElementById('input3').style.backgroundColor='black';
        document.getElementById('input3').style.borderColor='black';
        document.getElementById('input4').style.backgroundColor='black';
        document.getElementById('input4').style.borderColor='black';
        document.getElementById('facebook').style.color='black';
        document.getElementById('twitter').style.color='black';
        document.getElementById('insta').style.color='black';
        document.getElementById('linkdin').style.color='black';
        document.getElementById('darklogo').style.display='none';
        document.getElementById('darklogo2').style.display='none';
        document.getElementById('lightlogo').style.display='block';
        document.getElementById('lightlogo2').style.display='block';
        document.getElementById('footer').style.backgroundColor='white';
    }
}
