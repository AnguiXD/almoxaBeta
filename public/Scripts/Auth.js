
function loadPage(pageChoosen)
{


    if(pageChoosen==1)
    {
        $(function()
        {
            $('#main').load('/codeigniter/public/html/login.html');
        })
    }
    else if(pageChoosen==2)
    {
        $(function()
        {
            $('#main').load('/codeigniter/public/html/forgetPassword.html');
        })
    }
    else
    {
        $(function()
        {
            $('#main').load('/codeigniter/public/html/signUp.html');
        })
    }
}
