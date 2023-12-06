
using Microsoft.AspNetCore.Mvc;

namespace FirstCoreMVCApp.Controllers

{
    public class HelloWorldController : Controller
    {
        // GET: /HelloWorld/

        public string Index()
        {
            return "This is my default action";
        }
        //Get: /HelloWorld/Welcome

        public string Welcome()
        {
            return "this is the welcome action method";
        }
    }
}