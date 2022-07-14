<x-setup>
    <x-auth-card>
        <link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
        <x-slot name="logo">
            <a href="/">
                <h1 id = "m-name">Mugupp</h1>
            </a>
        <div id="register" class = "animated slideInRight">
            <button id = close-registry><i class = "bi bi-x"></i></button>
            <div class="font-sans text-gray-900 antialiased">

                    <link rel="stylesheet" href="{{asset('css/register.css')}}">
            
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{ route('register') }}" enctype = "multipart/form-data">
                        @csrf
                        <label for="user_pic">Choose a profile picture</label>
                        <br>
                        <br>
                        <input type="file" name="user_pic" id="user_pic" />
                        <fieldset>
                            <!-- Name -->
                            <div class = mt-4>
                                <x-label for="name" :value="__('Name')" />
                
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <div class = mt-1>
                                <x-label for="username" :value="__('Username')" />
                
                                <x-input id="username" class="block  w-full" type="text" name="username" :value="old('username')" required autofocus />
                            </div>
                            <div class = mt-1>
                                <x-label for="date" :value="__('Date')" />
                                
                                <x-input type="date" :value="old('Date Of Birth')" class="block  w-full" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" placeholder="yyyy-mm-dd" id="date-of-birth" name="dateOfBirth" class="form-control ng-pristine ng-invalid ng-touched" max="2006-01-03" min="1919-01-03" required autofocus />

                            </div>


                            
                            <!-- Email Address -->
                            <div class="mt-1">
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="block  w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-1">
                                <x-label for="password" :value="__('Password')" />
                
                                <x-input id="password" class="block  w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="mt-1">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                
                                <x-input id="password_confirmation" class="block  w-full"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                    
                        </fieldset> 
        
                        <br />
            
                        <fieldset> 

                            <legend> Your Review: </legend>

                            <div class="mt-1">
                                <x-label for="bio" :value="__('Your Bio')" />
                
                                <x-input id="bio" class="block  w-full" type="text" name="bio" :value="old('bio')" required />
                            </div>
                            
                            <br />
                            <br />
                        
                            <label for="hear-about">How did you hear about us?</label>   
                            <select name="referrer" id="hear-about">      
                                <option value="google">Google</option>      
                                <option value="friend">Friend</option>      
                                <option value="advert">Advert</option>      
                                <option value="others">Others</option>     
                            </select>
        
                            <br />
                            <br />
        
                            <p>We care about your privacy. By sharing your personal data you will be able to get research opportunities targeted to your interests, help to improve products and services and earn rewards for participation... You understand we will manage your admission service if successful at the end? </p>   
        
                            <div class = mt-4>
                                <label for="t&c">Do You?</label>       
                                <input id = t&c type="checkbox" checked name = "understood" /> 
        
                            </div>
                    
                            <div class = mt-4>
                                <label for="comments">Got any comments on us?</label>
                                <br />
                                <textarea id="comments" required name = "comment"></textarea> 
                            </div>
                            
                            
                            <div class = "mt-4">
                                <label for="subscribe">Sign me up for emails</label>     
                                <input id = subscribe type="checkbox" name="subscription" checked="checked" /> 
                            </div>
                        
                        </fieldset>
            
                        <a href="{{ Storage::url('docs/instructions.txt') }}" download>Instructions</a>
            
                        <div class="flex items-center justify-end ">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>

                </div>

        </div>
            </x-auth-card> 
</x-set-layout>
