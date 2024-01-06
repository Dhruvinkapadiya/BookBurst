function darkmode()
{
    const dark = document.getElementById('main').style.backgroundColor='white';

    if(dark)
    {
        document.getElementById('lightlogo').style.display='none';
        document.getElementById('darklogo').style.display='block';
        document.getElementById('main').style.backgroundColor='black';
        document.getElementById('dark').style.color='white';
        document.getElementById('form').style.color='white';
        document.getElementById('input1').style.backgroundColor='black';
        document.getElementById('input2').style.backgroundColor='black';
        document.getElementById('input3').style.backgroundColor='black';
        document.getElementById('input4').style.backgroundColor='black';
    }
    else{
        document.getElementById('lightlogo').style.display='block';
        document.getElementById('darklogo').style.display='none';
        document.getElementById('main').style.backgroundColor='white';
        document.getElementById('dark').style.color='black';
        document.getElementById('form').style.color='black';
        document.getElementById('input1').style.backgroundColor='white';
        document.getElementById('input2').style.backgroundColor='white';
        document.getElementById('input3').style.backgroundColor='white';
        document.getElementById('input4').style.backgroundColor='white';
    }
}