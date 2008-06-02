#!/usr/bin/ruby

# apparently Dreamhost does not run .bashrc so...
ENV['GEM_PATH'] = '/usr/lib/ruby/gems/1.8:/home/your_account/.gems' # from wiki
ENV['GEM_HOME'] = '/home/your_account/.gems'
ENV['FORCE_ROOT']=1.to_s

# all the gem goodness
require 'rubygems'
require 'camping'
require 'camping/fastcgi'

# in case of relative addressing?
Dir.chdir '/home/your_account/camping/test'

# Database connection, if required.
#Camping::Models::Base.establish_connection :adapter => 'sqlite3', :database => 'myapp.db'

require 'test'
Camping::FastCGI.start(Test)
