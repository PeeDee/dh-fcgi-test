#!/usr/bin/ruby
require 'rubygems'
require 'camping'
    
Camping.goes :Test # name of application

module Test::Controllers

 class Index < R '/'
   def get
     render :index
   end
 end

end

module Test::Views

   def index
     h1 "Hello World"
   end

end

if __FILE__ == $0
  require 'camping/fastcgi'
  Camping::FastCGI.start(Test)
end
