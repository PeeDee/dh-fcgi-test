#!/usr/bin/ruby

## REPLACE 'your_account' with your DH account name

# apparently Dreamhost does not run .bashrc so...
ENV['GEM_PATH'] = '/usr/lib/ruby/gems/1.8:/home/your_account/.gems'
ENV['GEM_HOME'] = '/home/your_account/.gems'
ENV['FORCE_ROOT']=1.to_s

require 'rubygems'
require 'camping'
require 'camping/fastcgi'

Dir.chdir '/home/your_account/camping/test'

#Camping::Models::Base.establish_connection :adapter => 'sqlite3', :database => 'myapp.db'
require 'test'
Camping::FastCGI.start(Test)
