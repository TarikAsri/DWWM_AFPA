
**What this whole thing was trying to say is that:**

• when a property is *private*, such thing means that bascially the only that same class will be able to use those properties , it has to be **from the very same class** , so for example ↓

*class Pokemon* 
{
    private $_name;
    private $_type;
    private $_numb;
}

so if we were to manipulate the data that will be entered later on, that data will only be possible to manipulate from within the class itself, and nowhere elese, not even a child class.

But if it's *protected* instead, then a child class that inherits from the parent class, will be able to manipulate the data from within as well...

**PRIVATE** and **PROTECTED** never allow foreign files to access the properties, no matter what, only *PUBLIC* does that.