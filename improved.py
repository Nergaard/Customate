import tkinter as tk
from tkinter import PhotoImage



class SampleApp(tk.Tk):
    #def __init__(self) is sort of the constructor for python. Self is an instance of the class
    def __init__(self):
        #I thingk this creates an instance of tkinter
        tk.Tk.__init__(self)
        #Set the frame parameter of the instance equal to nothing
        self._frame = None
        #Set the size to be full screen
        self.attributes('-fullscreen', True)
        #Run the methof switch_frame with the argument StartPage
        self.switch_frame(StartPage)


    def switch_frame(self, frame_class):
        """Destroys current frame and replaces it with a new one."""
        #Sets a new frame by using the correct method and using the instance as an argument
        new_frame = frame_class(self)
        #If the current frame is not none it is destroyed.
        if self._frame is not None:
            self._frame.destroy()
        #The current frame is set to the new frame regardless of the if statement
        self._frame = new_frame
        #Using pack
        self._frame.pack()

class StartPage(tk.Frame):
    def __init__(self, master):

        tk.Frame.__init__(self, master)
        tk.Label(self, text="This is the start page").pack(side="top", fill="x", pady=10)
        self.photo=PhotoImage(file="button_send-inn.png")
        tk.Button(self, image = self.photo,border=0,
                  command=lambda: master.switch_frame(PageOne)).pack()

class PageOne(tk.Frame):
    def __init__(self, master):
        tk.Frame.__init__(self, master)
        tk.Label(self, text="This is page one").pack(side="top", fill="x", pady=10)
        tk.Button(self, text="Return to start page",
                  command=lambda: master.switch_frame(StartPage)).pack()

class PageTwo(tk.Frame):
    def __init__(self, master):
        tk.Frame.__init__(self, master)
        tk.Label(self, text="This is page two").pack(side="top", fill="x", pady=10)
        tk.Button(self, text="Return to start page",
                  command=lambda: master.switch_frame(StartPage)).pack()

if __name__ == "__main__":
    app = SampleApp()
    app.mainloop()
