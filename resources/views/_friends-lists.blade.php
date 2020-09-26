<h3 class="font-bold text=xl mb-4">Friends</h3>
<ul>
    @foreach (range(1,8) as $index)
        <li class="mb-3">
            <div class="flex align-items-center text-sm">
            <img class="rounded-full mr-2" style=" height: 40px; width: 40px;" src="images/avatar1.png" alt="">
            John Doe 
            </div>
        </li>
    @endforeach
</ul>