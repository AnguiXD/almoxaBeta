function loadPage(pageChoosen=1)
{


    if(pageChoosen==1)
    {
        $(function()
        {
            $('#main').load('../view/auth/login.html');
        })
    }
    else
    {
        $(function()
        {
            $('#main').load('../view/auth/forgetPassword.html');
        })
    }
    
}
loadPage(1);