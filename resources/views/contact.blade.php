<x-layout>
    <x-slot name="title">Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-5">
           <h1 class="text-warning mb-5 border-bottom">Contact Me</h1>
        <div class="row text-white mb-2">
            <p class="mx-auto mb-5 subtitle" style="text-align: justify;text-indent:100px;">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus soluta voluptatem impedit dolorem, similique ducimus deleniti recusandae excepturi velit facilis dolorum, numquam deserunt minus perferendis quaerat assumenda saepe libero minima?
            </p>
            <div class="col-sm-9 mb-5">
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputName" >Your Name</label>
                            <input type="text"
                            class="form-control mt-2" id="inputName">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="text"
                            class="form-control mt-2" id="inputName">
                        </div>
                        <div class="col-md-12">
                            <label for="inputSubject">Your Subject</label>
                            <textarea type="text"
                            class="form-control mt-2" id="inputSubject"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail">Your Message</label>
                            <input type="text"
                            class="form-control mt-2 mb-2" id="yourMessage">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
                <div class="col-sm-3 mt-5 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-geo-alt-fill text-warning"></i>
                            <p class="subtitle">Pune ,Maharashtra,India</p>
                        </li>
                        <li>
                            <i class="bi bi-telephone-forward-fill text-warning"></i>
                            <p class="subtitle">+91 9895969395 </p>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill text-warning"></i>
                            <p class="subtitle">bhinge@gmail.com </p>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </div>
        </div>
        <div class="text-center">
            <a href=""><i class="bi bi-facebook text-warning  size"></i></a>
            <a href=""><i class="bi bi-instagram text-warning size"></i></a>
            <a href=""><i class="bi bi-linkedin text-warning size"></i></a>
            <a href=""><i class="bi bi-github text-warning size"></i></a>

        </div>
    </x-slot>
</x-layout>