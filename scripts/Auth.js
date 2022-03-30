function loadPage(pageChoosen=1)
{


    if(pageChoosen==1)
    {
        $(function()
        {
            $('#main').load('../view/auth/login.html');
        })
    }
    else if(pageChoosen==2)
    {
        $(function()
        {
            $('#main').load('../view/auth/forgetPassword.html');
        })
    }
    else
    {
        $(function()
        {
            $('#main').load('../view/auth/signUp.html');
        })
    }
    
}
loadPage(1);