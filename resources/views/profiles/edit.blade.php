<x-app>
   <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('patch')

      
      <div class="md-6">
         <label for="name"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
         >
            Name
         </label>

         <div class="col-md-6">
            <input id="name" 
               type="text" 
               class="border border-gray-400 p-2 w-full"
               name="name" 
               value="{{ $user->name }}" 
               required
             >

            @error('name')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="md-6">
         <label for="username"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
         >
            userName
         </label>

         <div class="col-md-6">
            <input id="username" 
               type="text" 
               class="border border-gray-400 p-2 w-full"
               name="username" 
               value="{{ $user->username }}" 
               required
             >

            @error('username')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="mb-6">
         
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
            for="avatar"
         >
            Avatar
         </label>
         <div class="flex">
            <input id="avatar" 
               type="file" 
               class="border border-gray-400 p-2 w-full"
               name="avatar" 
               required
            >
            <img src="{{ $user->avatar }}"
               alt="your avatar"
               width="40" 
            >
         </div>
         @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
         @enderror
        
      </div>

      <div class="md-6">
         <label for="email"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
         >
            email
         </label>

         <div class="col-md-6">
            <input id="email" 
               type="email" 
               class="border border-gray-400 p-2 w-full"
               name="email" 
               value="{{ $user->email }}" 
               required
             >

            @error('email')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="md-6">
         <label for="password"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
         >
            password
         </label>

         <div class="col-md-6">
            <input id="password" 
               type="password" 
               class="border border-gray-400 p-2 w-full"
               name="password" 
               value="" 
               required
             >

            @error('password')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="md-6">
         <label for="password_confirmation"
            class="block mb-2 uppercase font-bold text-xs text-gray-700"
         >
            Password Confirmation
         </label>

         <div class="col-md-6">
            <input id="password_confirmation" 
               type="password" 
               class="border border-gray-400 p-2 w-full"
               name="password_confirmation" 
               value="" 
               required
             >

            @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
         </div>
      </div>

      <div class="mb-6">
         <button type="submit"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
         >
            Submit
         </button>
      </div>

   </form>
</x-app>